#include <stdio.h>
//#include <stdlib.h>
//#include <string.h>

struct student
{

    char name[50];

    int roll;

    int attendance;
};

void login()
{

    char username[20], password[20];

    printf("\nEnter username: ");

    scanf("%s", username);

    printf("Enter password: ");

    scanf("%s", password);

    // Add your authentication logic here
}

void insert()
{

    struct student s;

    printf("\nEnter name: ");

    scanf("%s", s.name);

    printf("Enter roll number: ");

    scanf("%d", &s.roll);

    printf("Enter attendance: ");

    scanf("%d", &s.attendance);

    FILE *fp;

    fp = fopen("students.txt", "a");

    fprintf(fp, "%s %d %d\n", s.name, s.roll, s.attendance);

    fclose(fp);
}

void display()
{

    struct student s;

    FILE *fp;

    fp = fopen("students.txt", "r");

    printf("\nName\tRoll\tAttendance\n");

    while (fscanf(fp, "%s %d %d\n", s.name, &s.roll, &s.attendance) != EOF)
    {

        printf("%s\t%d\t%d\n", s.name, s.roll, s.attendance);
    }

    fclose(fp);
}

void search()
{

    struct student s;

    int roll;

    printf("\nEnter roll number to search: ");

    scanf("%d", &roll);

    FILE *fp;

    fp = fopen("students.txt", "r");

    while (fscanf(fp, "%s %d %d\n", s.name, &s.roll, &s.attendance) != EOF)
    {

        if (s.roll == roll)
        {

            printf("\nName\tRoll\tAttendance\n");

            printf("%s\t%d\t%d\n", s.name, s.roll, s.attendance);

            break;
        }
    }

    fclose(fp);
}

void delete_modify()
{

    struct student s;

    int roll, choice;

    printf("\nEnter roll number to delete/modify: ");

    scanf("%d", &roll);

    FILE *fp1, *fp2;

    fp1 = fopen("students.txt", "r");

    fp2 = fopen("temp.txt", "w");

    while (fscanf(fp1, "%s %d %d\n", s.name, &s.roll, &s.attendance) != EOF)
    {

        if (s.roll == roll)
        {

            printf("\nName\tRoll\tAttendance\n");

            printf("%s\t%d\t%d\n", s.name, s.roll, s.attendance);

            printf("Do you want to delete or modify this record? (1/2): ");

            scanf("%d", &choice);

            if (choice == 1)
            {

                continue;
            }
            else
            {

                printf("\nEnter new attendance: ");

                scanf("%d", &s.attendance);
            }
        }

        fprintf(fp2, "%s %d %d\n", s.name, s.roll, s.attendance);
    }

    fclose(fp1);

    fclose(fp2);

    remove("students.txt");

    rename("temp.txt", "students.txt");
}

int main()
{

    int option;

    do
    {

        printf("\nMenu\n");

        printf("1. Login\n");

        printf("2. Insert details of student\n");

        printf("3. Display all details\n");

        printf("4. Search specific information\n");

        printf("5. Delete/modify\n");

        printf("6. Exit\n");

        printf("Enter your option: ");

        scanf("%d", &option);

        switch (option)
        {

        case 1:

            // Login function
            login();
            break;

        case 2:

            // Insert details function
            insert();
            break;

        case 3:

            // Display all details function
            display();
            break;

        case 4:

            // Search specific information function
            search();
            break;

        case 5:

            // Delete/modify function
            delete_modify();
            break;

        case 6:

            printf("Exiting program...\n");

            break;

        default:

            printf("Invalid option! Please enter a valid option.\n");

            break;
        }

    } while (option != 6);

    return 0;
}

